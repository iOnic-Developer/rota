# Rota

A single-file weekly shift planner you can open on your phone or laptop.

## Run

- **Locally:** open `index.html` directly in any modern browser.
- **Online (phone + laptop):** push to GitHub, then in **Settings → Pages** pick the branch and root, and the site will be served at `https://<user>.github.io/rota/`.

## How it works

- `+` (top left) adds a person. Each person's sidebar box shows shift counts and total hours.
- Drag a person onto any cell in the 7-day × 5-role grid. A small popover asks Morning / Evening / All day.
- Click an assigned mini-box to remove that assignment.
- Empty cells show 4 placeholder slots (2×2); once a 5th person is added, the cell grows to 2×3 (max 6).
- Data is stored per-device in `localStorage`. Use **Clear all** (bottom of sidebar) to reset.

## Hours

| Shift   | Mon–Thu, Sun | Fri, Sat |
|---------|:-:|:-:|
| Morning (10:00–15:00) | 5 h | 5 h |
| Evening (15:00–19:00 / 20:00) | 4 h | 5 h |
| All day | 9 h | 10 h |

`Shifts` total counts Morning/Evening as 0.5 each and All day as 1.
