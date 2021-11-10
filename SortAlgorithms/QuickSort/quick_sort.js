function quickSort(arr, fromInx, toInx) {
    if(fromInx < toInx) {
        let pivotInx = movePivotToNewIndex(arr, fromInx, toInx);

        quickSort(arr, fromInx, pivotInx - 1);
        quickSort(arr, pivotInx + 1, toInx);
    }
}

function movePivotToNewIndex(arr, fromInx, toInx) {
    console.log('partitioning => ', (toInx-fromInx) + 1, arr);
    let pivotInx = toInx;
    let projectedPivotInx = fromInx - 1;
    for(let seeker=fromInx; seeker < toInx; seeker++) {
        if(arr[seeker] < arr[pivotInx]) {
            swap(arr, ++projectedPivotInx, seeker);
            //console.log('projectedPivotInx='+projectedPivotInx, 'seeker='+seeker, arr);
        }
    }
    swap(arr, ++projectedPivotInx, pivotInx);
    return projectedPivotInx;
}

function swap(arr, i, j) {
    [arr[i], arr[j]] = [arr[j], arr[i]];
}

let arr = [9,10,12,3,59,6,8,9,8,2,3,8];
quickSort(arr, 0, arr.length - 1);

console.log('FINAL RESULT ==> ', arr);