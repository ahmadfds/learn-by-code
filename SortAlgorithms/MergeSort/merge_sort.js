function mergeSortedArrays(left, right) {
    let arr = [];
    let i = 0;
    let j = 0;
    while(i < left.length || j < right.length) {
        if(i === left.length) {
            arr.push(right[j]);
            j++;
        } else if(j === right.length) {
            arr.push(left[i]);
            i++;
        } else if(left[i] < right[j]) {
            arr.push(left[i]);
            i++;
        } else {
            arr.push(right[j]);
            j++;
        }
    }
    return arr;
}

function mergeSort(arr=[]) {
    if(arr.length < 2) {
        return arr;
    }

    let left = arr.splice(0, Math.floor(arr.length / 2));
    return mergeSortedArrays(mergeSort(left), mergeSort(arr));
}

console.log(mergeSort([0, 5, 2, 6, 8, 4, 9, 1, 3]));
