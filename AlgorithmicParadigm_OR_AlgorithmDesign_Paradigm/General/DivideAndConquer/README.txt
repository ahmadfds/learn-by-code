Divide And Conquer
This technique can be divided into the following three parts:

Divide: This involves dividing the problem into some sub problem.
Conquer: Sub problem by calling recursively until sub problem solved.
Combine: The Sub problem Solved so that we will get find problem solution.

The following are some standard algorithms that follows Divide and Conquer algorithm.
- Quicksort is a sorting algorithm. The algorithm picks a pivot element, rearranges the array elements in such a
  way that all elements smaller than the picked pivot element move to left side of pivot, and all greater elements
  move to right side. Finally, the algorithm recursively sorts the subarrays on left and right of pivot element.
- Merge Sort is also a sorting algorithm. The algorithm divides the array in two halves, recursively sorts them
  and finally merges the two sorted halves.
- Closest Pair of Points The problem is to find the closest pair of points in a set of points in x-y plane. The
  problem can be solved in O(n^2) time by calculating distances of every pair of points and comparing the distances
  to find the minimum. The Divide and Conquer algorithm solves the problem in O(nLogn) time.
- Strassen’s Algorithm is an efficient algorithm to multiply two matrices. A simple method to multiply two matrices
  need 3 nested loops and is O(n^3). Strassen’s algorithm multiplies two matrices in O(n^2.8974) time.
- Cooley–Tukey Fast Fourier Transform (FFT) algorithm is the most common algorithm for FFT. It is a divide and conquer
  algorithm which works in O(nlogn) time.
- Karatsuba algorithm for fast multiplication it does multiplication of two n-digit numbers in at most


 Contrary to popular belief, "Binary Search" is not an example of Divide and Conquer because there is only one sub-problem in
 each step (Divide and conquer requires that there must be two or more sub-problems) and hence this is a case of Decrease and Conquer.

 Divide And Conquer algorithm :

 DAC(a, i, j)
 {
     if(small(a, i, j))
       return(Solution(a, i, j))
     else
       m = divide(a, i, j)               // f1(n)
       b = DAC(a, i, mid)                 // T(n/2)
       c = DAC(a, mid+1, j)            // T(n/2)
       d = combine(b, c)                 // f2(n)
    return(d)
 }


 Divide and Conquer (D & C) vs Dynamic Programming (DP)
 Both paradigms (D & C and DP) divide the given problem into subproblems and solve subproblems. How to choose one of them for a
 given problem? Divide and Conquer should be used when the same subproblems are not evaluated many times. Otherwise Dynamic
 Programming or Memoization should be used. For example, Quicksort is a Divide and Conquer algorithm, we never evaluate the same
 subproblems again. On the other hand, for calculating the nth Fibonacci number, Dynamic Programming should be preferred (See this for details).
