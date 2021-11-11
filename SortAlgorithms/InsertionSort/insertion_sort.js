//
// push min values to array's first
// Time complexity O(n^2)
//
function insertionSort(arr) {
    let i, key, j;
    for (i = 1; i < arr.length; i++) {
        // moving i and j together
        key = arr[i];
        j = i - 1;

        // if j index was bigger than i index then start shifting
        while (j >= 0 && arr[j] > key) {
            arr[j + 1] = arr[j];
            j = j - 1;
        }

        // put the key in the last shifted place
        arr[j + 1] = key;
    }
}

let arr = [5, 55, 6, 32, 12, 4, 8, 6, 78, 7, 9, 66, 48];
insertionSort(arr);
console.log(arr);