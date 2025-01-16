# Laravel Authentication with Aadhar Update Feature

This Laravel application implements user authentication (login and registration) along with a feature to update a user's Aadhar number. The application includes proper validation and an easy-to-use UI.

## Features

- **User Registration & Login**: 
    - Users can register and log in to the application.
    - After successful registration, the user is redirected to a logged-in page.

- **Client and Server Validation**:
    - Both client-side (JavaScript) and server-side (Laravel request validation) validation are implemented for registration and login.
    - Dedicated request files are created for handling validation during registration and login.

- **Update Aadhar Number**:
    - After logging in, the user can navigate to a page where they can update their Aadhar number.
    - Only the last 4 digits of the Aadhar number are displayed initially.
    - Users can click the "Update Aadhar" button to reveal a text box where they can input a new 12-digit Aadhar number.
    - Aadhar numbers are validated to be unique in the system to prevent duplication.

- **Database Migration**:
    - A migration is created to store the Aadhar number in the database and enforce the uniqueness constraint for each user.

- **Post-Update Confirmation**:
    - After successfully updating the Aadhar number, a confirmation message is displayed to the user.

- **Logout Option**:
    - After updating the Aadhar number, users can log out from the application.
 

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/laxmankp11/AadharApp.git
    ```

2. Navigate to the project directory:

    ```bash
    cd AadharApp
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Set up your `.env` file and generate the application key:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. Run the migrations:

    ```bash
    php artisan migrate
    ```

6. Serve the application:

    ```bash
    php artisan serve
    ```

7. Visit the application in your browser at `http://127.0.0.1:8000`.

## Usage

- To register a new user, visit the registration page.
- After registration, you will be redirected to the logged-in page.
- On the logged-in page, you can update your Aadhar number by clicking the "Update Aadhar" button.
- You will see the last 4 digits of your Aadhar number initially. You can update it with a new 12-digit Aadhar number.
- After updating, a success message will appear and you can log out.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
