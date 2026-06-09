import { describe, expect, it } from "@jest/globals";
import { POST } from "./route";

const createRequest = (body: unknown) =>
    new Request("http://localhost/api/assignments/submit", {
        method: "POST",
        headers: { "content-type": "application/json" },
        body: JSON.stringify(body),
    });

describe("POST /api/assignments/submit", () => {
    it("returns 400 when fields are missing", async () => {
        const response = await POST(createRequest({ studentId: "student-1" }));

        expect(response.status).toBe(400);
    });

    it("returns 201 when the payload is valid", async () => {
        const response = await POST(
            createRequest({
                studentId: "student-1",
                assignmentId: "assignment-1",
                code: "console.log('submitted');",
            }),
        );

        expect(response.status).toBe(201);
        await expect(response.json()).resolves.toEqual({
            message: "Assignment submitted successfully",
        });
    });
});