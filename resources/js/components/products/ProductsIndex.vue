<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createProduct'}" class="btn btn-success">Create new Product</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Products list</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Color</th>
                        <th width="100">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr vue-for="product, index in products">
                        <td>{{ product.name }}</td>
                        <td>{{ product.size }}</td>
                        <td>{{ product.type }}</td>
                        <td>{{ product.amount }}</td>
                        <td>{{ product.color }}</td>
                        <td>
                            <router-link :to="{name: 'editProduct', params: {id: product.id}}" class="btn btn-xs btn-default">
                                Edit
                            </router-link>
                            <a href="#"
                               class="btn btn-xs btn-danger"
                               v-on:click="deleteEntry(product.id, index)">
                                Delete
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                products: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/api/v1/products')
                .then(function (resp) {
                    app.products = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load products");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/api/v1/products/' + id)
                        .then(function (resp) {
                            app.products.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete product");
                        });
                }
            }
        }
    }
</script>