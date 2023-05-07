# Task 05

You're working on a new mobile game that involves different types of characters (e.g. warriors, mages, archers) that can use different types of weapons (e.g. swords, wands, bows). You want to implement a system that allows for different combinations of characters and weapons without creating a separate class for each combination. To do this, you can use the Bridge pattern.


## Steps

1- Identify the Abstraction and Implementor:

* The Abstraction is the Character class hierarchy. This is the high-level class that represents the character and defines its behavior. 
* The Implementor is the Weapon class hierarchy. This is the low-level class that defines the weapon and how it is used by the character.

2- Create the Abstraction Interface:

* The Abstraction interface is the interface that the client code will use to interact with the Abstraction. In this case, you can create a new interface CharacterInterface with methods like attack() and setWeapon(Weapon $weapon) that represent the character and its weapon.

3- Implement the Abstraction:

* The Abstraction implementation is the class that implements the Abstraction interface. In this case, you can create a new class Character that implements the CharacterInterface. 
* This class should have a reference to the Implementor and should delegate the setWeapon() method to it. 
* The Character class represents the character and its behavior, and the Implementor represents the weapon and how it is used by the character.

4- Implement the Implementor:

* The Implementor implementation is the class that implements the Implementor interface. In this case, you can create a new class Weapon that implements the WeaponInterface. 
* This class should have a method useWeapon(). The Weapon class represents the weapon and how it is used by the character.

5- Test the Bridge.
