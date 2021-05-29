The backtracking algorithm enumerates a set of partial candidates that, in principle, could be completed in various ways to
give all the possible solutions to the given problem. The completion is done incrementally, by a sequence of candidate extension steps.

Conceptually, the partial candidates are represented as the nodes of a tree structure, the potential search tree. Each partial
candidate is the parent of the candidates that differ from it by a single extension step; the leaves of the tree are the
partial candidates that cannot be extended any further.

The backtracking algorithm traverses this search tree recursively, from the root down, in depth-first order. At each node c, the algorithm
checks whether c can be completed to a valid solution. If it cannot, the whole sub-tree rooted at c is skipped (pruned).
Otherwise, the algorithm (1) checks whether c itself is a valid solution, and if so reports it to the user; and (2) recursively
enumerates all sub-trees of c. The two tests and the children of each node are defined by user-given procedures.

Therefore, the actual search tree that is traversed by the algorithm is only a part of the potential tree. The total cost of
the algorithm is the number of nodes of the actual tree times the cost of obtaining and processing each node. This fact should be considered
when choosing the potential search tree and implementing the pruning test.

Pseudocode
In order to apply backtracking to a specific class of problems, one must provide the data P for the particular instance of the problem
that is to be solved, and six procedural parameters, root, reject, accept, first, next, and output. These procedures should take the
instance data P as a parameter and should do the following:

root(P): return the partial candidate at the root of the search tree.
reject(P,c): return true only if the partial candidate c is not worth completing.
accept(P,c): return true if c is a solution of P, and false otherwise.
first(P,c): generate the first extension of candidate c.
next(P,s): generate the next alternative extension of a candidate, after the extension s.
output(P,c): use the solution c of P, as appropriate to the application.
The backtracking algorithm reduces the problem to the call backtrack(root(P)), where backtrack is the following recursive procedure:

procedure backtrack(c) is
    if reject(P, c) then return
    if accept(P, c) then output(P, c)
    s ← first(P, c)
    while s ≠ NULL do
        backtrack(s)
        s ← next(P, s)


Examples where backtracking can be used to solve puzzles or problems include:

Puzzles such as eight queens puzzle, crosswords, verbal arithmetic, Sudoku[nb 1], and Peg Solitaire.
Combinatorial optimization problems such as parsing and the knapsack problem.
Logic programming languages such as Icon, Planner and Prolog, which use backtracking internally to generate answers.