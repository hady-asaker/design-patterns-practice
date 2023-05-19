# Task 15

Implement a product filtering system using the Specification pattern.

Description:
You are building an e-commerce platform, and you need to implement a product filtering system that allows users to search for products based on various criteria. Your task is to implement the Specification pattern to define product specifications and apply them to filter the products.


## Steps

1- Implement a Product class with properties such as name, price, and category.

2- Define a Specification interface with a method isSatisfiedBy(Product $product) that returns a boolean indicating if the given product satisfies the specification.

3- Implement concrete specification classes, such as PriceSpecification, CategorySpecification, and NameSpecification, that implement the Specification interface and define specific criteria for filtering products based on price, category, and name.

4- Create a ProductFilter class that takes a list of products and applies the specifications to filter the products. 
* The ProductFilter class should have methods like filterBySpecification(Specification $specification) to filter products based on a single specification and filterBySpecifications(array $specifications) to filter products based on multiple specifications.

5- Demonstrate the usage of the Specification pattern by creating instances of the Product class, defining specifications, and filtering products using the ProductFilter class.
