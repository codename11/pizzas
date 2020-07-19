# Food Ordering Service

## Technologies used:
 - Ajax
 - React
 - Laravel

Free css template is taken from [here](https://themewagon.com/thank-you-for-downloading/?item_id=65812&dl=S1psNFo3ZTZ2U0svVWR6U0w5Snc5elFVUXBySW9hSFlhZktlOVpEMTVqZkVRc0dGNEk2eEljYzd1eHQ2RDhpQg==) , 
credits for it goes to its author.

My part is ![Articles listing](1.png). 
A listing of articles divided by their type, e.g. pizzas, drinks, burgers and pastas, in singular.
By clicking on particular tab, it lists all elements of particular type. Ex. if you click on `pasta`, it will list only pastas and so on ...

This only list pastas:
![Only pastas](2.png)

Other example listing are same in nature.

Fixed to right side is shopping basket.

![basket](3.png)

By hovering over, it pops out.

Basket showing how many articles are present:

![basket](4.png)

If you click on it it shows articles which can be removed from basket.

![basket](5.png)

It shows list of articles which can be removed and total price will be recalculated(dollars and euros).

![basket](6.png)

Prices and total price is still recorded in db only in dollars. 

Login and register actions are classic from Laravel. Only thing added is address field during registration proccess. There are no checks for address except that it is required.

It is also said in pdf containing instructions, that user don't have to registered one to order stuff so i had to improvise. During checkout for unregistered user i.e. "customer" he/she is automatically added along with data entered(name and address) in customers table. Customers table is for customers and users table is for registered users who can also be customers, that how i saw it.
`Customer enters name and address on checkout while, for registered user, it is automatically populated.`

Articles table:

![table](11.png)  

Users table:
![table](7.png)

Customers table:

![table](8.png)  

After check out, besides customer, there are also orders table and order_details table.

Orders table contain an id of particular order along with customer who order it, total_price of articles and fields when it's created and updated(timstamp fields from Laravel).

![table](9.png) 

Order_details table contain order_id along with article_id, quantity of said article and timestamps.

![table](10.png) 

Everyone of these tables are connected via foreign keys and with appropriate Laravel relationships.

Database schema:

![schema](12.png) 

If user is registered and logged in:

![schema](13.png) 

For anyone wanting to see how it looks live with db and all, you can check it out at [Heroku](https://pizzzas.herokuapp.com/) .

I used different branch for Heroku, because of it's peculiarities.

Heroku branch:
[alt](https://github.com/codename11/pizzas/tree/herokubranch)

and Master branch which have all functionalities including uploaded images:
[main](https://github.com/codename11/pizzas/tree/master)

### Addendum: 15.7.2020 to 19.7.2020

 - Fixed not showing images issue. It was because Heroku ignores symlink created by Laravel. It's resolved by adding uploads directly to public folder. There is no way around it when you use Heroku.

 - Resolved main menu not closing after clicking on menu items.

 - Changed default page from `Dashboard` to main page redirects.

 - Added pagination with 6 articles per page. It was done with Ajax by blocking normal flow i.e. when you click in Laravel pagination links, url gets parameter `page=Num` when `Num` is number. Basically ajax intercepts normal behaviour and send a call of it's own to controller method where pagination originates.   
 
 - Changed default styling of Laravel pagination.

 - Added external api for usd/eur conversion and delivery charges.

 - Restyled order details modal. Look snazzier now.
 
 - Added Cors middleware for fonts.

 - Recreated symlink.
