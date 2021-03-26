- Bridge is used when we need to decouple an abstraction from its implementation so that the two can vary independently.
This type of design pattern comes under structural pattern as this pattern decouples implementation class and abstract
class by providing a bridge structure between them.

- IMPORTANT:
   Keep in mind not to violate the single responsibility principle when you apply the bridge patten, which happens when you inject the implementation
   object inside the abstraction object, (Ex: having a save function inside the entity object)