"use client";

import { useCallback, useState } from "react";
import { useAutosave } from "../hooks/useAutosave";

type AssignmentFormProps = {
    assignmentId: string;
    initialCode?: string;
    autosaveDelay?: number;
};

export default function AssignmentForm({
    assignmentId,
    initialCode = "",
    autosaveDelay = 500,
}: AssignmentFormProps) {
    const [code, setCode] = useState(initialCode);
    const storageKey = `assignment:${assignmentId}:code`;

    const saveCode = useCallback(
        ({ code: latestCode }: { code: string }) => {
            window.localStorage.setItem(storageKey, latestCode);
        },
        [storageKey],
    );

    useAutosave({ code }, autosaveDelay, saveCode);

    return (
        <div>
            <label htmlFor="assignment-code">Code</label>
            <textarea
                id="assignment-code"
                value={code}
                onChange={(event) => setCode(event.target.value)}
                rows={12}
                aria-describedby="assignment-autosave-status"
            />
            <p id="assignment-autosave-status" role="status" aria-live="polite">
                Changes are saved automatically.
            </p>
        </div>
    );
}