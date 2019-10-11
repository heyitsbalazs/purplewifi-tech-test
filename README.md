# purplewifi-tech-test

https://adventofcode.com/2018/day/10
 
Tested on PHP 7.3 and Composer 1.9.0. 
## How to install / run
```
composer install
php vendor/bin/phpunit
```

## FAQ
> Where is the solution?

After playing around with the task for a while, this seems like a task that was made with some human interaction in mind.  
  
Whilst it is certainly possible to create a function that would loop, second to second, log the size of the grid for the given second, until the grid size starts to increase again, then find the smallest number in our array of grid sizes, however, ultimately, I've found the solution using the tools below, which ultimately fulfills my objective.

I've built the following tools to aid you in finding your solution:
1. Star Calculator, responsible for actioning vector movements
2. Grid Calculator, responsible for calculating the size of the grid, with a set of stars
3. Star Drawer. Draw a set of stars :)! – be careful, drawing a grid too large *will* cause out of memory errors.

My solution is:   
Question 1: PHFZCEZX  
Question 2: 10634

Proof:
![Solution 1](data/solution1.png)

![Solution 2](data/solution2.png)

> Why do I rely so heavily on collections?  

Whilst collections are indeed considerably slower than their native counterparts, they provide a set of well-documented, excellent methods that are easy to understand.

I appreciate that there may be cases where speed is crucial, however, this isn't one of those cases, and so I would much rather prefer readability.
