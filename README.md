# Project1-Fighter-Robot

## Arm Control Interface
A user interface for controlling robotic arm motors
The interface contains six motors. Each motor's value is between 0-180. Each motor is set to an initial value of 90. In addition to 4 buttons:
* Save button that saves the values to the database
* On button sends the value 1 to the database to start the motors.
* Off button sends the value 0 to the database to stop the motors.
* Center button to reset the values of the motors to their default values.

![alt text](https://github.com/KawtherAH/Project1-Fighter-Robot/blob/main/arm%20control%20Pg.png?raw=true)

## Base Control Interface
Robot base control user interface
The interface contains five buttons, each button represents a direction (**F**orward, **B**ackward, **R**ight, **L**eft, and **S**top). Directions are saved in the database with the first char of the direction name.

![alt text](https://github.com/KawtherAH/Project1-Fighter-Robot/blob/main/base%20control%20Pg.png?raw=true)

## Database
### Arm Control Table
Consists of 7 columns (6 motors and arm state).
> CREATE TABLE `fighter_robot`.`arm` ( `motor1` INT(3) NOT NULL , `motor2` INT(3) NOT NULL , `motor3` INT(3) NOT NULL , `motor4` INT(3) NOT NULL , `motor5` INT(3) NOT NULL , `motor6` INT(3) NOT NULL , `state` INT(1) NOT NULL ) ENGINE = InnoDB;
> 
![alt text](https://github.com/KawtherAH/Project1-Fighter-Robot/blob/main/arm%20Table.png?raw=true)

### Base Control Table
Consists of two columns (Id and current direction).
> CREATE TABLE `fighter_robot`.`base` ( `id` INT NOT NULL , `direction` CHAR(1) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

![alt text](https://github.com/KawtherAH/Project1-Fighter-Robot/blob/main/base%20Table.png?raw=true)

## FR Control Panal
The control panel of the arm is integrated with the control panel of the base in one interface(FR_ControlPanal) with the interface being linked to the database.

![alt text](https://github.com/KawtherAH/Project1-Fighter-Robot/blob/main/ControlPanel.png?raw=true)

