In computer science, brute-force search or exhaustive search, also known as generate and test, is a very general
problem-solving technique and algorithmic paradigm that consists of systematically enumerating all possible candidates
for the solution and checking whether each candidate satisfies the problem's statement.

Basic algorithm
In order candidate for P after the current one c.

valid (P, c): check whether candidate c is a solution for P.
output (P, c): use the solution c of P as appropriate to the application.
The next procedure must also tell when there are no more candidates for the instance P, after the current one c. A
convenient way to do that is to return a "null candidate", some conventional data value Λ that is distinct from any
real candidate. Likewise the first procedure should return Λ if there are no candidates at all for the instance P.
The brute-force method is then expressed by the algorithm

c ← first(P)
while c ≠ Λ do
    if valid(P,c) then
        output(P, c)
    c ← next(P, c)
end while
For example, when looking for the divisors of an integer n, the instance data P is the number n. The call first(n)
should return the integer 1 if n ≥ 1, or Λ otherwise; the call next(n,c) should return c + 1 if c < n, and Λ otherwise;
and valid(n,c) should return true if and only if c is a divisor of n. (In fact, if we choose Λ to be n + 1, the tests
n ≥ 1 and c < n are unnecessary.)The brute-force search algorithm above will call output for every candidate that is
a solution to the given instance P. The algorithm is easily modified to stop after finding the first solution, or a
specified number of solutions; or after testing a specified number of candidates, or after spending a given amount of CPU time.