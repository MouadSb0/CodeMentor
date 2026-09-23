import { z } from "zod";

const submissionSchema = z.object({
    studentId: z.string().min(1),
    assignmentId: z.string().min(1),
    code: z.string(),
});

export async function POST(request: Request) {
    try {
        const body = await request.json();
        const submission = submissionSchema.safeParse(body);

        if (!submission.success) {
            return Response.json(
                { error: "Invalid request body", details: submission.error.flatten() },
                { status: 400 },
            );
        }

        return Response.json(
            { message: "Assignment submitted successfully" },
            { status: 201 },
        );
    } catch {
        return Response.json({ error: "Invalid request body" }, { status: 400 });
    }
}