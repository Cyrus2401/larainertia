<template>

    <div>

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Liste des Niveaux Scolaire</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <CreateNiveauScolaire /> 
                            <div class="card-tools">
                                <Pagination 
                                    :links="props.niveauScolaires.links" 
                                    :prev="props.niveauScolaires.prev_page_url"
                                    :next="props.niveauScolaires.next_page_url" />
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Niveau scolaire</th>
                                        <th style="width: 100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="niveauScolaire in props.niveauScolaires.data">
                                        <td>{{ niveauScolaire.nom }}</td>
                                        <td>
                                            <div class="d-flex justify-items-center">
                                                <button class="bnt btn-danger mr-2"><i class="fas fa-pen"></i></button>
                                                <button class="bnt btn-info"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</template>

<script setup>
    import Pagination from "../../Shared/Pagination.vue";
    import CreateNiveauScolaire from '../NiveauScolaire/CreateNiveauScolaire.vue';

    const props = defineProps({

        niveauScolaires: Object

    })
</script>