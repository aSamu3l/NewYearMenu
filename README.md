# NewYearMenu

## Description
It is a simple project that uses PHP to generate an HTML site from a JSON file where all the courses of the New Year lunch/dinner are written so that guests can see the menu directly from their phone.

## How to use

1. **Clone the repository:**
   ```sh
   git clone https://github.com/aSamu3l/NewYearMenu.git
   cd NewYearMenu
   ```

2. **Modify the menu:**
    - Open the `menu.json` file in a text editor.
    - Update the menu items as needed. For example:
        ```json
        {
            "appetizer": [
                "Deviled Eggs",
                "Spring Salad"
            ],
            "first course": [
                "Lamb Soup",
                "Asparagus Risotto"
            ],
            "main course": [
                 "Roast Lamb",
                 "Honey Glazed Ham"
            ],
            "dessert": [
                "NewYear Bread",
                "Carrot Cake",
                "Hot Cross Buns"
            ]
        }
        ```

3. **Set up a web server:**
    - **Apache:**
        1. Ensure Apache is installed and running.
        2. Place the project directory in the Apache `htdocs` directory (e.g., `/var/www/html/NewYearMenu`).
        3. Access the project in your browser at `http://localhost/NewYearMenu`.

    - **Nginx:**
        1. Ensure Nginx is installed and running.
        2. Configure Nginx to serve the project directory. Add a server block in your Nginx configuration:
           ```nginx
           server {
               listen 80;
               server_name localhost;
   
               root /path/to/NewYearMenu;
               index index.php index.html;
   
               location / {
                   try_files $uri $uri/ =404;
               }
   
               location ~ \.php$ {
                   include snippets/fastcgi-php.conf;
                   fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
               }
           }
           ```
        3. Reload Nginx configuration:
           ```sh
           sudo systemctl reload nginx
           ```
        4. Access the project in your browser at `http://<your-ip>`.

4. **View the NewYear menu:**
   Open your web browser and navigate to the appropriate URL (e.g., `http://<your-ip>/NewYearMenu` for Apache or `http://<your-ip>` for Nginx) to see the NewYear menu.

## License
This project is distributed under the MIT License.