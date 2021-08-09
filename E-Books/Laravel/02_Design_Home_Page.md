# Route in Laravel
The workflow of Laravel is shown as fallows:
<img src='imgs/Fig005_Workflow_Laravel.jpg' />
<p>source: <a href="#ref1">Build a React App With a Laravel RESTful Back End</a></p>

- Step 1: Open project by using Visual Studio Code
- Step 2: look the routing setting
<img src='imgs/Fig006_looking_route_file.png' />
- Step 3: modify the content in welcome.blead.php file to see what happen
<img src='imgs/Fig007_modify_welcome.blead.png' />
<img src='imgs/Fig008_result_after_modify_welcome.blead.png' style='border: solid 1px rgb(0, 255, 255);' />
<img src='imgs/Fig009_modify_route.png' style='border: solid 1px rgb(0, 255, 255);' />


## The API and the HTTP actions associated with those endpoints

- GET /products/: Retrieve all products.
- GET /product/{id}: Retrieve the product that matches the id.
- POST /products: Create a new product and insert it into the database.
- PUT /products/{id} : Update an existing product that matches the id.
- DELETE /products/{id}: Delete the product with the given id.

<img src='imgs/Fig011_Route_Action_to_endpoint.jpg' />
source: https://code.tutsplus.com/tutorials/build-a-react-app-with-laravel-restful-backend-part-1-laravel-5-api--cms-29442


## Videos

## Reference:

- <a name="ref1" href="https://code.tutsplus.com/tutorials/build-a-react-app-with-laravel-restful-backend-part-1-laravel-5-api--cms-29442">Build a React App With a Laravel RESTful Back End: Part 1, Laravel 5.5 API</a>