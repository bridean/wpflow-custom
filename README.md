# WPFlow Custom

A deliberately minimal WordPress theme, hand-built from scratch — no starter theme, no page builder, no build tools.

## Why it's minimal

This theme exists to work directly in WordPress core fundamentals rather than abstract them away: the template hierarchy, The Loop, hooks and filters, `functions.php`, `wp_enqueue`, and template tags. Starter themes ship with hundreds of lines of someone else's decisions — useful for shipping fast, but they hide the machine. This is the engine with the hood off.

## Structure

| File | Role |
|------|------|
| `style.css` | Stylesheet header — how WordPress identifies the theme |
| `index.php` | Catch-all template; contains The Loop |
| `header.php` | Opens the document; fires `wp_head()` |
| `footer.php` | Closes it; fires `wp_footer()` |
| `functions.php` | Theme setup and stylesheet enqueue via hooks |

## WPFlow

This theme is the first artifact flowing through **WPFlow** — an AI-augmented WordPress development pipeline:

**Local Docker WordPress → edit with Claude Code → test with WP-CLI → commit to Git → push to GitHub → deploy to remote Linode VPS**

Nothing reaches the live site until it works locally. Git is the single source of truth, so any mistake is one command to undo.

**Stack:** Docker · WP-CLI · Git/GitHub · Claude Code (VS Code) · Nginx/PHP 8.3 on Linode

## Status

Active development. Traditional custom theme first; headless React deliberately deferred.