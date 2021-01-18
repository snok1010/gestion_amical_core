var map = new Map();
let total = 0.0;

/**
 * calculates the total price to be paid
 * @param {String} item_name name of the item of which you want to increase the selected quantity
 * @param {float} item_price price of the selected item, amount that must be added 
 * to the total already selected to have the total price to pay 
 */
function totalCalculation(item_price) {
    total += item_price;
}

/**
 * calculates the number of times the item is selected
 * @param {String} item_name name of the item you want to change the number of which you want to select
 */
function increaseQuantities(item_name){
    if(map.has(item_name)){
        map.set(item_name, map.get(item_name)+1);
    }else{
        map.set(item_name, 1);
    }
}