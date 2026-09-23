"use client";

import { FormEvent, useState } from "react";

type AssignmentFormProps = {
    studentId: string;
    assignmentId: string;
};

export default function AssignmentForm({
    studentId,
    assignmentId,
}: AssignmentFormProps) {
    const [code, setCode] = useState("");
    const [message, setMessage] = useState<string | null>(null);
    const [isError, setIsError] = useState(false);
    const [isSubmitting, setIsSubmitting] = useState(false);

    async function handleSubmit(event: FormEvent<HTMLFormElement>) {
        event.preventDefault();
        setIsSubmitting(true);
        setMessage(null);
        setIsError(false);

        try {
            const response = await fetch("/api/assignments/submit", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ studentId, assignmentId, code }),
            });
            const result = await response.json().catch(() => null);

            if (!response.ok) {
                throw new Error(result?.error ?? "Unable to submit assignment.");
            }

            setMessage(result?.message ?? "Assignment submitted successfully.");
        } catch (error) {
            setIsError(true);
            setMessage(
                error instanceof Error
                    ? error.message
                    : "Unable to submit assignment.",
            );
        } finally {
            setIsSubmitting(false);
        }
    }

    return (
        <form onSubmit={handleSubmit}>
            <label htmlFor="assignment-code">Code</label>
            <textarea
                id="assignment-code"
                value={code}
                onChange={(event) => setCode(event.target.value)}
                required
                rows={12}
            />
            <button type="submit" disabled={isSubmitting}>
                {isSubmitting ? "Submitting..." : "Submit assignment"}
            </button>
            {message && (
                <p role="status" aria-live="polite" data-error={isError || undefined}>
                    {message}
                </p>
            )}
        </form>
    );
}