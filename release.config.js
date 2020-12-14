module.exports = {
  branches: "main",
  repositoryUrl: "https://github.com/IamManchanda/react-ci-cd-workflow-app",
  plugins: [
    "@semantic-release/commit-analyzer",
    "@semantic-release/release-notes-generator",
    [
      "@semantic-release/github",
      {
        assets: [
          {
            path: "build.zip",
            name: "Build",
          },
          {
            path: "coverage.zip",
            name: "Coverage",
          },
        ],
      },
    ],
  ],
};
