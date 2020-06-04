## Assessment Requirement

### Description

The assessment has two parts:

#### Part 1

The candidate needs to implement a backend REST API - GET `/api/products/` which returns a list of all
products. 

#### Part 2

The candidate needs to display all products in Wordpress page then the public user is able to see a list of products on Web page.


This is a take-away assessment should take no longer than 2-3 hours.

### Implementation Details

#### Part 1

1. Please Fork this repo and install this laravel repo locally

2. The code has provided a simple structure for you to start:

    - A `ProductApiController.php` that contains a function which requires you to implement the logic
    - A `ProductApiRequest.php`
    - A `Product.php` eloquent model
    - A registered route in `api.php` (we do not require any auth or middleware in this assessment)
    - A seed files for you to seed initial Product data for live testing
    
3. Please finish API endpoint by satisfying the following requirements:

    - The API needs to satisfy
    
    GET /api/products
        - supports query filter: `is_active` only accepts `1` or `0`
        - Success status code: `200`
        - support validation on query by using `ProductApiRequest.php`
        - products should not display `hidden_information` field
        
4. Write a feature test for your endpoint.


#### Part 2

1. Install a fresh wordpress project on your own
2. Call the API that you have done in Part 1
3. Display result in a wordpress page as HTML format:

````html
<ul>
    <li>Product 1</li>
    <li>Product 2</li>
    ....
</ul>
```` 


### Submission

#### Part 1
1. Create a PR by using your forked repo
2. Adding all your notes into this `readme`
3. Send us your fork repo link

#### Part 2
1. create a public repo under your github account and send us the link
2. Include any special setup details if you need to tell us in the `readme`


### Bonus

If you think the task can be done within a short time frame, you can consider adding your own features to the assessment.

Some potential add-ons:

- Add filter option on `is_active` in wordpress page
- Add wildcard search on name filter in API or in wordpress page
...

You can be creative and expand functionality as long as requirements are met.

