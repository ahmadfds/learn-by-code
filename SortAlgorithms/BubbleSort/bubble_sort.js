//
// push max values to array's end
// Time complexity O(n^2)
//
function bubbleSort(arr) {
    let maxProjectedIndex = arr.length - 1;
    let swapped;
    do {
        swapped = false;
        for (let j = 1; j <= maxProjectedIndex; j++) {
            if (arr[j-1] >= arr[j]) {
                // flip pairs
                [arr[j-1], arr[j]] = [arr[j], arr[j-1]];
                swapped = true;
            }
        }
        maxProjectedIndex--;
    } while(swapped);
}

let arr = [5, 55, 6, 32, 12, 4, 8, 6, 78, 7, 9, 66, 48];
bubbleSort(arr);
console.log(arr);