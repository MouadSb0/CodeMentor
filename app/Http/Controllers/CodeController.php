<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CodeController extends Controller
{
    /**
     * Analyze code using DeepSeek AI.
     */
    public function check(Request $request)
    {
        $code = $request->input('code');

        if (empty($code)) {
            return response()->json([
                'success' => false, 
                'message' => 'No code provided for analysis.'
            ]);
        }

        $apiKey = config('services.deepseek.key');

        // Fallback for demonstration if API key is not configured
        if (!$apiKey) {
            return response()->json([
                'success' => true,
                'analysis' => "<span class='text-primary font-bold'>[AI Analysis Mode: Simulated]</span><br/>" .
                             "Your code structure is valid. Here are some observations:<br/>" .
                             "1. The <code>initializeCodeMentorCore</code> function correctly uses <code>async/await</code>.<br/>" .
                             "2. Safety protocols are bypassed (<code>safety: false</code>), which aligns with 'surgical-precision' mode.<br/>" .
                             "3. Recommendation: Add a <code>try...catch</code> block to handle connection timeouts."
            ]);
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ])->timeout(30)->post('https://api.deepseek.com/v1/chat/completions', [
                'model' => 'deepseek-chat',
                'messages' => [
                    [
                        'role' => 'system', 
                        'content' => 'You are a professional coding assistant. Analyze the provided code for logic errors, syntax issues, and potential optimizations. Return your findings in a concise format suitable for a developer terminal. Use HTML tags like <code>, <br>, and <span> for formatting.'
                    ],
                    ['role' => 'user', 'content' => "Analyze this code:\n\n" . $code],
                ],
            ]);

            if ($response->successful()) {
                $data = $response->json();
                return response()->json([
                    'success' => true,
                    'analysis' => $data['choices'][0]['message']['content'] ?? 'No analysis results available.'
                ]);
            }

            return response()->json([
                'success' => false, 
                'message' => 'API Error: ' . ($response->json('error.message') ?? 'DeepSeek API unreachable.')
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false, 
                'message' => 'System error during analysis: ' . $e->getMessage()
            ]);
        }
    }
}
