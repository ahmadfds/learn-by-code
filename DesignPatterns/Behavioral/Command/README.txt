In command pattern there is a Command object that encapsulates a request by binding together a set of
actions on a specific receiver. It does so by exposing just one method execute() that causes some actions
to be invoked on the receiver.

So what we want to achieve is a design that provides loose coupling and remote control should not have much
information about a particular device. The command pattern helps us do that.