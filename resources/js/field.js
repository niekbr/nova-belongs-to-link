Nova.booting((Vue, router, store) => {
    Vue.component('index-nova-tree-select', require('./components/IndexField'))
    Vue.component('detail-nova-tree-select', require('./components/DetailField'))
    Vue.component('form-nova-tree-select', require('./components/FormField'))
})
