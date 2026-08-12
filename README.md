# DigiFintech Corporate Website

This repository contains the production source code for the DigiFintech Solution Private Limited corporate website.

## Technology Stack
- **Frontend**: HTML5, CSS3, Vanilla JavaScript (ES6+)
- **Backend**: PHP 
- **Database**: MySQL (for enquiry storage)
- **Architecture**: Modular includes, zero-build step required.

## Folder Structure
- `/includes`: Core PHP partials, config, and security functions (Protected via `.htaccess`)
- `/assets`: Static CSS, JS, Images, Fonts
- `/api`: Secure endpoints for AJAX form processing
- `index.php`: Primary landing page
- `404.php`: Custom error handling

## Local Development Requirements
- Any standard LAMP/XAMPP stack (Apache, PHP 8.x, MySQL).
- No Node.js, `npm`, or build steps required.

## Configuration
1. Open `/includes/config.php`.
2. Update the `ENVIRONMENT` variable if deploying to production.
3. Configure `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS` if initializing the database.

## Security Notes
- CSRF protection is configured via session tokens for forms.
- SQL queries use PDO Prepared Statements.
- `.htaccess` blocks direct access to internal `/includes/`.
- XSS prevention is handled via `htmlspecialchars` (utility function `escape()`).

## Deployment
Upload the contents of this repository to any standard Apache/PHP hosting environment. The `.htaccess` file handles URL routing and caching rules.

### Reverse Proxy & Load Balancer Requirements
- **Direct Apache/PHP deployment**: `REMOTE_ADDR` works normally for rate limiting.
- **Behind Cloudflare/reverse proxy/load balancer**: The infrastructure must be configured (e.g., via Apache `mod_remoteip` or Nginx `real_ip_module`) to restore the real client IP before PHP executes.
- The PHP application itself intentionally does **not** blindly trust client-controlled forwarding headers (like `X-Forwarded-For`) to prevent IP spoofing attacks.
## Future Implementation Phases
- **Phase 2**: Core Sections (Services, Ecosystem Diagram, BFSI)
- **Phase 3**: Publisher Portal & Form Integrations
- **Phase 4**: Analytics & Final Polish
