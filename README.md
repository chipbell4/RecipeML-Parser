PHP Library to parse Recipe Markup language (that I invented)

```
A Recipe looks like the following
@Recipe Cake
@Ingredients Icing
@I 1/2 cup sugar
@I 1 cup milk
@I 1/3 cup flour
@EndIngredients
Hello world here is an image:
@Image /images/whatever.jpg Here is some alt text
```

This will render for the most part like the following:
```html
<h2 class="recipe-title">Cake</h2>
<h3 class="ingredients-header">Icing</h3><ul class="ingredients-list">
<li class="ingredient">&#xBD; cup sugar </li>
<li class="ingredient">1 cup milk </li>
<li class="ingredient">$#x2153; cup flour </li>
</ul>
Hello world here is an image:<img class='recipe-image' src='/images/whatever.jpg' alt='Here is some alt text'/>
```
