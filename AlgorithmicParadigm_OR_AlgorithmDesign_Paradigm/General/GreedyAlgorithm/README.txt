A greedy algorithm is any algorithm that follows the problem-solving heuristic of making the locally optimal choice at each stage.
In many problems, a greedy strategy does not usually produce an optimal solution, but nonetheless, a greedy heuristic may yield locally
optimal solutions that approximate a globally optimal solution in a reasonable amount of time.

For example, a greedy strategy for the travelling salesman problem (which is of a high computational complexity) is the following heuristic:
"At each step of the journey, visit the nearest unvisited city." This heuristic does not intend to find a best solution, but it terminates
in a reasonable number of steps; finding an optimal solution to such a complex problem typically requires unreasonably many steps.
In mathematical optimization, greedy algorithms optimally solve combinatorial problems having the properties of matroids, and give
constant-factor approximations to optimization problems with submodular structure.

Greedy algorithms typically (but not always) fail to find the globally optimal solution because they usually do not operate exhaustively on
all the data. They can make commitments to certain choices too early which prevent them from finding the best overall solution later.
For example, all known greedy coloring algorithms for the graph coloring problem and all other NP-complete problems do not consistently
find optimum solutions. Nevertheless, they are useful because they are quick to think up and often give good approximations to the optimum.


Examples:
- The activity selection problem is characteristic to this class of problems, where the goal is to pick the maximum number of activities
that do not clash with each other.
- The matching pursuit is an example of greedy algorithm applied on signal approximation.
- A greedy algorithm finds the optimal solution to Malfatti's problem of finding three disjoint circles within a given triangle that maximize
the total area of the circles
- A greedy algorithm is used to construct a Huffman tree during Huffman coding where it finds an optimal solution.
- In decision tree learning, greedy algorithms are commonly used, however they are not guaranteed to find the optimal solution.
- Dijkstra's algorithm and the related A* search algorithm are verifiably optimal greedy algorithms for graph search and shortest path finding.
- Kruskal's algorithm and Prim's algorithm are greedy algorithms for constructing minimum spanning trees of a given connected graph.
They always find an optimal solution, which may not be unique in general.