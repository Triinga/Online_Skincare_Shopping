const products = [
    { price: 15.30, name: 'Los Shampoo' },
    { price: 14.06, name: 'Thickening Balsam' },
    { price: 25.90, name: 'Catalysis Spra' },
    { price: 15.30, name: 'Control Shampoo' },
    { price: 15.30, name: 'Control Shampoo' },
    { price: 12.20, name: 'Shampoo Promo' },
    { price: 15.00, name: 'Neogenic Shampoo' },
    { price: 15.30, name: 'Reducing Shampoo' },
  ];

const productsIds = [];
products.forEach(function (products){
    productsIds.push(products.price);
});
console.log("Products: ", JSON.stringify(products, null, 4));
console.log("Products price: ", productsIds.toString());

//me .map()
const prdprc = products.map(function (prd){
    return prd.price
});
console.log("Cmimet e produkteve me map(): ", prdprc.toString());

//reduce()
const produktet = [
    {
        cmimi: 15.30,
        name: "Loss Shampoo"
    },
    {
        cmimi: 14.06,
        name: "Thickenin Balsam"
    },
    {
        cmimi: 25.90,
        name: "Catalysis Spray"
    },
    {
        cmimi: 15.30,
        name: "Control Shampoo"
    },
    {
        cmimi: 15.30,
        name: "Control Shampoo"
    },
    {
        cmimi: 12.20,
        name: "Shampoo Promo"
    },
    {
        cmimi: 15.00,
        name: "Neogenic Shampoo"
    },
    {
        cmimi: 15.30,
        name: "Reducing Shampoo"
    },
];
const totalPrices = produktet.reduce(function(accumulator,produkti){
    return accumulator + produkti.cmimi;
}, 0);
console.log("Cmimi total i produkteve per floke: ", totalPrices);

//filter()
var shampoo = produktet.filter(function (produkti){
    return produkti.name === "Control Shampoo";
});
console.log("Control Shampoo", shampoo);
