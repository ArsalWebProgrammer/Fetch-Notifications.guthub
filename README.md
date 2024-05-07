# Real-Time Notification System

This is a simple real-time notification system implemented using PHP and AJAX polling. It allows users to receive notifications in real-time without the need to manually refresh the page.

## Features

- Fetches notifications from the server every 5 seconds using AJAX polling.
- Displays notifications in real-time without page refresh.

## Usage

1. Clone the repository to your local machine:

```bash
git clone https://github.com/your_username/notification-system.git
```

2. Set up your local development environment (e.g., XAMPP, WAMP, or MAMP) and ensure PHP and MySQL are installed.

3. Import the provided `database.sql` file into your MySQL database to create the necessary tables.

4. Update the database connection details in the `db_connection.php` file.

5. Customize the notification logic in the `notification_functions.php` file as needed.

6. Run the application using a local server.

7. Access the application in your web browser and test the real-time notification functionality.

## Example

```html
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- JavaScript code to fetch notifications -->
<script>
$(document).ready(function() {
    // Function to fetch notifications
    function fetchNotifications() {
        $.ajax({
            url: 'fetch_notifications.php',
            type: 'GET',
            success: function(data) {
                $('#notifications').html(data);
            }
        });
    }

    // Fetch notifications every 5 seconds
    setInterval(fetchNotifications, 5000);
});
</script>

<!-- HTML to display notifications -->
<div id="notifications"></div>
```

## Contributing

Contributions are welcome! If you have any suggestions, bug fixes, or improvements, please feel free to submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
