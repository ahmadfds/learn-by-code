function search(list, searchFor) {
    for(let inx in list) {
        if(list[inx] === searchFor) {
            return inx;
        }
    }
    return -1;
}