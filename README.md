# KJ-pishing-form-registrasi

"KJ Phishing Registration Form"

This project is a phishing registration form built for educational purposes to raise awareness about potential cybersecurity threats. It is essential to use this tool responsibly and only in environments where explicit permission has been granted.

### Instructions for Running the Project:

1. **Clone the Project:**
   ```
   git clone https://github.com/your-username/KJ-phishing-form-registration.git
   ```

2. **Open in IDE (e.g., VScode):**
   Open the project in your preferred Integrated Development Environment (IDE), such as Visual Studio Code.

3. **Copy Environment File:**
   Copy the `.env.example` file and rename it to `.env`.

4. **Database Setup:**
   - Start your database server.
   - Create a new database (e.g., `KJ-phishing-registration`).

5. **Configure Database Connection:**
   Update the `.env` file with your database connection details.

6. **Install Dependencies:**
   Open a terminal and run:
   ```
   composer install
   ```

7. **Generate Application Key:**
   Run the following command to generate the application key:
   ```
   php artisan key:generate
   ```

8. **Database Migration:**
   Migrate the database using:
   ```
   php artisan migrate
   ```

9. **Run the Server:**
   Start the server with:
   ```
   php artisan serve
   ```

10. **Testing:**
    Open your browser and navigate to [http://127.0.0.1:8000/registrasi](http://127.0.0.1:8000/registrasi) for testing.

### Disclaimer:
This project is intended for educational purposes only. The creator is not responsible for any misuse or unauthorized access. Ensure that you have appropriate permissions before using this tool. Use it responsibly and ethically.

### Contributing:
Contributions are welcome! Please follow ethical guidelines and contribute responsibly.

### License:
This project is licensed under [MIT License](link-to-license).

For more details, refer to the project documentation and guidelines.
