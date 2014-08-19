# FlexPress controller component

## Install with Pimple
- This example creates a page controller, you must pass it the DIC.
```
$pimple["pageController"] = function ($c) {
  return new PageController($c);
};

```
## Implementing the concreate class
- Create a class that implements the AbstractController class
- You have to implement the indexAction method, which takes a $request object, this is a Symfony 2Request component object.

```
class PageController extends AbstractController {

    public function indexAction($request)
    {
      
        echo "This is the index action for the PageController";
      
    }

}
```

You can also extend the AbstractTimberController which adds the render method that uses Timber/Twig to render the given template with the context.

```
class PageController extends AbstractTimberController {

    public function indexAction($request)
    {

        $context = \Timber::get_context();
        $this->render('page.twig', $context);

    }

}
```
Finally you will want to use the DIC on the controller to access various data and services, you can do this via the dic property of the controller:
```
public function indexAction($request)
{

    $context = \Timber::get_context();
    $context["searchManager"] = $this->dic["searchManager"];
    
    $this->render('page.twig', $context);

}
```
