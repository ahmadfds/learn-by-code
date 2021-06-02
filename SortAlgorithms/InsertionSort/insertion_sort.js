function insertionSort(arr) {
    let i, key, j;
    for (i = 1; i < arr.length; i++)
    {
        key = arr[i];
        j = i - 1;
        while (j >= 0 && arr[j] > key)
        {
            arr[j + 1] = arr[j];
            j = j - 1;
            console.log(arr);
        }
        arr[j + 1] = key;
        console.log(arr);
        console.log("=================================");
    }
}

let arr = [5, 55, 6, 32, 12, 4, 8, 6, 78, 7, 9, 66, 48];
insertionSort(arr);
console.log(arr);