Single Responsibility Principle. As the name suggests, this principle states that each class should have one
responsibility, one single purpose. This means that a class will do only one job, which leads us to conclude
it should have only one reason to change.

Examples:
    - createInstance function inside each class, since the class is not responsible to create an object of itself.
    - save function in entity object, cause the entity object is not responsible about saving itself of making itself persistent.
    - clone function as in prototype design pattern, to implement the clone properly it supposed to be implemented by third party class, such as "ClassCopier"