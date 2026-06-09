import { act, render } from "@testing-library/react";
import { useAutosave } from "./useAutosave";

type AutosaveProbeProps = {
    data: { code: string };
    delay: number;
    save: (data: { code: string }) => void;
};

function AutosaveProbe({ data, delay, save }: AutosaveProbeProps) {
    useAutosave(data, delay, save);
    return null;
}

describe("useAutosave", () => {
    beforeEach(() => {
        jest.useFakeTimers();
    });

    afterEach(() => {
        jest.runOnlyPendingTimers();
        jest.useRealTimers();
    });

    it("calls save once after the delay with the latest data", () => {
        const save = jest.fn();
        const { rerender } = render(
            <AutosaveProbe
                data={{ code: "first version" }}
                delay={500}
                save={save}
            />,
        );

        rerender(
            <AutosaveProbe
                data={{ code: "latest version" }}
                delay={500}
                save={save}
            />,
        );

        act(() => {
            jest.advanceTimersByTime(499);
        });
        expect(save).not.toHaveBeenCalled();

        act(() => {
            jest.advanceTimersByTime(1);
        });

        expect(save).toHaveBeenCalledTimes(1);
        expect(save).toHaveBeenCalledWith({ code: "latest version" });
    });
});