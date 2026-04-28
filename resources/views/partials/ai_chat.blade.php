<!-- AI Assistant Chat Widget -->
<div id="ai-chat-widget" class="fixed bottom-24 right-12 w-96 z-[999] flex flex-col drop-shadow-[0_20px_50px_rgba(0,101,115,0.15)] overflow-hidden rounded-xl bg-white/80 dark:bg-slate-950/80 backdrop-blur-2xl ring-1 ring-white/20 hidden transition-all duration-300">
<!-- Widget Header -->
<div class="bg-primary px-6 py-4 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-on-primary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary text-xl" data-icon="bolt" data-weight="fill" style="font-variation-settings: 'FILL' 1;">bolt</span>
</div>
<span class="font-headline font-bold text-on-primary">Assistant Overview</span>
</div>
<div class="flex items-center gap-2">
<button onclick="closeAiChat()" class="text-on-primary/70 hover:text-on-primary transition-colors"><span class="material-symbols-outlined text-lg" data-icon="remove">remove</span></button>
<button onclick="closeAiChat()" class="text-on-primary/70 hover:text-on-primary transition-colors"><span class="material-symbols-outlined text-lg" data-icon="close">close</span></button>
</div>
</div>
<!-- Chat History -->
<div class="h-[450px] overflow-y-auto p-6 flex flex-col gap-6 bg-surface-container-lowest/50">
<!-- User Message -->
<div class="flex flex-col items-end gap-2">
<div class="max-w-[85%] bg-surface-container-low text-on-surface rounded-2xl p-4 text-sm font-medium">
                        How do I properly integrate the Kinetic API with our current data lake? I'm having trouble with the schema mapping.
                    </div>
<span class="text-[10px] text-outline uppercase font-bold tracking-tighter">You • 10:24 AM</span>
</div>
<!-- AI Response -->
<div class="flex flex-col items-start gap-2">
<div class="flex items-center gap-2 mb-1">
<div class="w-5 h-5 rounded bg-primary/20 flex items-center justify-center">
<span class="material-symbols-outlined text-[12px] text-primary" data-icon="bolt">bolt</span>
</div>
<span class="text-[10px] text-primary uppercase font-bold tracking-tighter">Devrak Intelligence</span>
</div>
<div class="max-w-[90%] bg-white rounded-2xl rounded-tl-none p-4 text-sm text-on-surface shadow-sm ring-1 ring-primary/5 leading-relaxed">
                        To integrate the Kinetic API, you need to use the <code class="bg-surface-container-low px-1.5 py-0.5 rounded text-primary font-mono text-xs">TransformNode</code> interface. Here is a snippet of the standard kinetic mapping:
                        <div class="mt-3 bg-slate-900 rounded-lg p-3 text-[11px] font-mono text-cyan-300 overflow-x-auto">
<span class="text-pink-400">const</span> kineticLake = <span class="text-pink-400">new</span> KineticConnector({<br/>
                            &nbsp;&nbsp;lakeId: <span class="text-amber-200">"dev_cluster_01"</span>,<br/>
                            &nbsp;&nbsp;mapping: (data) =&gt; ({<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;...data,<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;vectorized: <span class="text-pink-400">true</span><br/>
                            &nbsp;&nbsp;})<br/>
                            });
                        </div>
                        This ensures all incoming streams are properly tagged for the neural processor.
                    </div>
</div>
<!-- User Message 2 -->
<div class="flex flex-col items-end gap-2">
<div class="max-w-[85%] bg-surface-container-low text-on-surface rounded-2xl p-4 text-sm font-medium">
                        Does this support real-time telemetry?
                    </div>
<span class="text-[10px] text-outline uppercase font-bold tracking-tighter">You • 10:25 AM</span>
</div>
</div>
<!-- Input Box -->
<div class="p-4 bg-white border-t border-outline-variant/10">
<div class="relative flex items-center bg-surface-container-low rounded-xl pr-2">
<input class="w-full bg-transparent border-none py-3 px-4 text-sm focus:ring-0 placeholder:text-outline/60" placeholder="Ask anything about the lab..." type="text"/>
<button class="bg-primary text-on-primary p-2 rounded-lg hover:scale-105 active:scale-95 transition-all">
<span class="material-symbols-outlined" data-icon="send">send</span>
</button>
</div>
<div class="mt-3 flex justify-center gap-4">
<span class="text-[10px] text-outline flex items-center gap-1"><span class="material-symbols-outlined text-[12px]" data-icon="history">history</span> History saved</span>
<span class="text-[10px] text-outline flex items-center gap-1"><span class="material-symbols-outlined text-[12px]" data-icon="auto_awesome">auto_awesome</span> GPT-4 Omni</span>
</div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatBtns = document.querySelectorAll('span[data-icon="chat_bubble"]');
    chatBtns.forEach(span => {
        const btn = span.closest('button');
        if (btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const chatWidget = document.getElementById('ai-chat-widget');
                if (chatWidget) {
                    chatWidget.classList.toggle('hidden');
                }
            });
        }
    });
});

function closeAiChat() {
    const chatWidget = document.getElementById('ai-chat-widget');
    if (chatWidget) {
        chatWidget.classList.add('hidden');
    }
}
</script>
