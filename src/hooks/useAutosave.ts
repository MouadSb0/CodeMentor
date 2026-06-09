import { useEffect, useRef } from "react";

type SaveFunction<T> = (data: T) => void | Promise<void>;

export function useAutosave<T extends object>(
    data: T,
    delay: number,
    save: SaveFunction<T>,
) {
    const timerRef = useRef<ReturnType<typeof setTimeout> | null>(null);

    useEffect(() => {
        if (timerRef.current !== null) {
            clearTimeout(timerRef.current);
        }

        timerRef.current = setTimeout(() => {
            void save(data);
            timerRef.current = null;
        }, delay);

        return () => {
            if (timerRef.current !== null) {
                clearTimeout(timerRef.current);
                timerRef.current = null;
            }
        };
    }, [data, delay, save]);
}