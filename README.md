# laravel-ecommerce-product
Laravel Ecommerce product database design structure with sample queries.


## first look through the migration, seeds and model files
all the above files you need to use if you want to access this system.


##Following are the queries from which you want to fetch data in controllers

$prs = App\Product::with(['skus','skus.images','characterstics']);

that is upto you what do you want to fetch but with above eloquent query I'm fetch list of product with it's skus, skus.images and characterstics.

###Characterstics are colors, size, dimensions
E.g. charactertics as colors can be: red, green,blue.
size can be small,medium, large

Currently this kind of product approach help me to maintain the product attribute.

The thing I am worried about is how to generated the variation. My Approach is that every product has one or many sku. then sku can have variation or sku should have charactertics and variations

so it should be like that 
App\Product::with(['skus','skus.images,'skus.characterstics','skus.charactertics.variations'])::find(2)

or another approach with the product i thought about product

App\Product::with(['skus','skus.images,'skus.characterstics','charactertics.variations'])::find(2)


I guess so far this document is not well documented, but please feel free to have a look at the models, migrations and seeds.

I would like you to see at the seed which is responsible to enter the relationships or product.

I really want to make it like woocommerce or magento type of product system.

Shoot me a comment for suggestions or to help me out in building this product.

but need suggestions.

Ciao
