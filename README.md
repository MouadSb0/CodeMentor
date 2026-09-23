# CodeMentor Interactive

![React](https://img.shields.io/badge/React-20232A?style=flat-square&logo=react&logoColor=61DAFB)
![TypeScript](https://img.shields.io/badge/TypeScript-3178C6?style=flat-square&logo=typescript&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-4169E1?style=flat-square&logo=postgresql&logoColor=white)
![Redis](https://img.shields.io/badge/Redis-DC382D?style=flat-square&logo=redis&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=flat-square&logo=docker&logoColor=white)
![Stripe](https://img.shields.io/badge/Stripe-635BFF?style=flat-square&logo=stripe&logoColor=white)

An interactive learning platform that teaches programming through hands-on courses, live code exercises, and AI-assisted code generation — all explained pedagogically, not just handed to you.

**[Live Demo](https://your-demo-link.com)** ·


<img width="1897" height="913" alt="Image" src="https://github.com/user-attachments/assets/ae175578-6482-4ea0-a95d-0d21187511e4" />
<img width="1896" height="897" alt="Image" src="https://github.com/user-attachments/assets/3c3ee5ca-e30b-4b19-ae95-c4487f572c9a" />
<img width="1896" height="897" alt="Image" src="https://github.com/user-attachments/assets/7dab28f1-687f-4fee-9485-8fa5f59b5744" />
<img width="1897" height="902" alt="Image" src="https://github.com/user-attachments/assets/f6673606-86d7-47ec-9d1a-cf3a64a31bb2" />
---

## Overview

CodeMentor Interactive combines three things that usually live in separate tools:

- **Structured courses** you work through at your own pace
- **A real code execution environment** so you run what you write, not just read about it
- **An AI code generator** that explains its output, so you learn *why* the code works

The goal is to shorten the gap between reading about programming and actually being able to do it. Content adapts to the learner's level, and everything runs in a sandboxed environment — no local setup required.

Built by **DevLearn Solutions**.

## Who it's for

- **Computer science students (18–25)** looking for resources that go beyond lecture slides
- **Self-taught learners (20–35)** who want to learn at their own pace
- **Teachers and instructors** who need interactive teaching tools
- **Junior developers** looking for practical, hands-on exercises

## Why CodeMentor

Most platforms solve one part of the problem. CodeMentor combines the pieces:

| Platform | What it lacks |
|---|---|
| W3Schools | Static content, no integrated execution environment, no code generation |
| Codecademy | Paid, limited personalization, no intelligent code generation |
| freeCodeCamp | Free but dated interface, no AI integration |
| LeetCode | Interview-focused, not pedagogical |
| GitHub Learning Lab | Tied to GitHub, steep for beginners |

CodeMentor's difference: **generated code that's explained**, content that **adapts to the learner's level**, and a **sandboxed execution environment** built in — not bolted on.

## Features

### Learning
- Interactive courses with live code examples
- Hands-on exercises executed in a sandboxed environment
- AI code generation with pedagogical explanations
- Content adapted to the learner's skill level
- Smart search by language, difficulty, and concept (variables, loops, functions, ...)
- Filters for duration, popularity, rating, and prerequisites
- Personal notes editor attached to each lesson

### Accounts
- Email and password registration
- OAuth login via Google and GitHub
- Profile with skill level, achievement badges, and learning history

### Community
- Comments and 5-star ratings on every lesson
- Favorites and direct sharing
- Themed forums by language and topic
- Friend referrals with rewards

### Platform
- Progressive Web App — installable on desktop and mobile
- Offline access to downloaded courses (code execution disabled offline)
- Push and email notifications for progress reminders and new content
- Learning agenda with Google Calendar / Outlook sync
- Accessibility: colorblind mode, adjustable font size, full keyboard navigation

### Payments
- Stripe and PayPal
- Monthly and annual subscriptions
- Promo codes for school partnerships
- One-time payment for certifications

## Plans

| | Free | Premium — €9.99/mo |
|---|---|---|
| Basic courses | ✅ | ✅ |
| Simple exercises | ✅ | ✅ |
| Advanced courses | — | ✅ |
| Unlimited code generation | — | ✅ |
| Guided projects | — | ✅ |
| Certificates | — | ✅ |

Institutional plans available for schools and universities.

## Admin & Roles

### Access levels
1. **Super Admin** — all accounts, system configuration, global statistics
2. **Content Admin** — create/edit/delete courses, validate submitted exercises, moderate forums
3. **Instructor** — build custom learning paths, track students, manually grade exercises
4. **Support** — user tickets and technical assistance

### Managed entities
- **Courses** — full CRUD with rich editor
- **Exercises** — exercise database with solutions
- **Users** — enable/disable, manual badge assignment, password resets
- **Payments** — subscription management, transaction history, invoice generation
- **Analytics** — engagement dashboard, completion rates per course, difficulty hotspots

### Exports
- User lists as CSV with progress
- Monthly usage statistics as PDF
- Personalized certificates as PDF
- Course content backup as JSON

## Tech Stack

| Layer | Technology |
|---|---|
| Frontend | React · TypeScript · PWA |
| Backend | [Node.js / NestJS / FastAPI — see note] |
| Database | PostgreSQL |
| Cache | Redis |
| Code Execution | Judge0 |
| AI | [OpenAI API / custom model] |
| Auth | Firebase Auth / Auth0 |
| Payments | Stripe · PayPal |
| Email | SendGrid / Mailgun |
| CDN | Cloudflare |
| Monitoring | Sentry · Google Analytics |
| Infra | Docker · CI/CD |

## Getting Started

### Prerequisites

- [Node.js](https://nodejs.org/) v18 or higher
- [Docker](https://www.docker.com/) (for PostgreSQL and Redis)
- npm

### Installation

```bash
git clone https://github.com/MouadSaber/codementor-interactive.git
cd codementor-interactive
npm install
```

### Environment variables

Create a `.env.local` in the project root:

```env
# Database
DATABASE_URL=postgresql://user:password@localhost:5432/codementor

# Redis
REDIS_URL=redis://localhost:6379

# Auth
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=

# Third-party services
JUDGE0_API_KEY=
OPENAI_API_KEY=
STRIPE_SECRET_KEY=
SENDGRID_API_KEY=
```

### Run the development environment

```bash
# Start PostgreSQL and Redis
docker compose up -d

# Run migrations
npm run db:migrate

# Start the dev server
npm run dev
```

Open [http://localhost:3000](http://localhost:3000).

### Build for production

```bash
npm run build
npm run start
```

## Project Structure

```
codementor-interactive/
├── src/
│   ├── components/       # Reusable UI components
│   ├── pages/            # Route-level views
│   ├── features/         # Feature modules (courses, exercises, generator)
│   ├── lib/              # Utilities and service clients
│   ├── hooks/            # Custom React hooks
│   └── styles/           # Tailwind config and global styles
├── server/               # API and background jobs
├── prisma/               # Database schema and migrations
├── public/               # Static assets
└── docker-compose.yml
```

## Deployment

Three environments, managed with admin access for the team:

| Environment | Purpose |
|---|---|
| Development | Local and feature work |
| Staging | Pre-release testing |
| Production | Public release |

- **Daily automated database backups**
- **SSL** via Let's Encrypt or equivalent
- **Scalability** — serverless or containerized architecture
- **CI/CD** pipeline for automated builds and deploys

## Design

- **Primary** `#2563EB` — trust, technology
- **Accent** `#10B981` — learning, growth
- **Background** `#F3F4F6`
- **Typography** — Inter (UI), Fira Code / JetBrains Mono (code)

Interface inspired by **VS Code** (professional developer tooling) and **Duolingo** (gamified progression). Deliberately avoiding the cluttered multi-panel layouts common in older LMS platforms.

## Roadmap

### v1.0 — MVP
- [ ] User accounts and OAuth
- [ ] Course catalog with search and filters
- [ ] Sandboxed code execution (Judge0)
- [ ] AI code generation with explanations
- [ ] Stripe subscriptions
- [ ] Admin back office

### Phase 2
- [ ] Direct messaging between users
- [ ] Mentorship and virtual pair programming
- [ ] Instructor-created custom learning paths
- [ ] Course marketplace

### Phase 3
- [ ] Native iOS and Android apps

## Contributing

[Add contribution guidelines, or delete this section for a solo project.]

## License

[MIT](./LICENSE) — or delete this section if you're not adding a license.

## Contact

**Mouad Saber** — [LinkedIn](https://www.linkedin.com/in/mouad-sbaer-1499a0374/) · [Portfolio](https://mouadsbaer.github.io/portfolio/) · mouadsbaer@gmail.com
