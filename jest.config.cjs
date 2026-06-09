module.exports = {
    testEnvironment: "jsdom",
    transform: {
        "^.+\\.[jt]sx?$": [
            "@swc/jest",
            {
                jsc: {
                    parser: { syntax: "typescript", tsx: true },
                    transform: { react: { runtime: "automatic" } },
                },
                module: { type: "commonjs" },
            },
        ],
    },
};