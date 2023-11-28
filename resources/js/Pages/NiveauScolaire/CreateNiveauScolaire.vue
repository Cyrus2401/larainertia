<template>

    <button class="btn btn-primary" data-toggle="modal" data-target="#createNVModal"> <i class="fa fa-plus mr-1"></i> Nouveau</button>

    <!-- Modal -->
    <div class="modal fade" id="createNVModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="createNVModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createNVModalLabel">Modal title</h5>
                    <button type="button" class="close" @click="closeModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="soumettre" id="createForm">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input id="nom" type="text" class="form-control" v-model="nomNiveauScolaire" required>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" @click="closeModal">Fermer</button>
                        <button form="createForm" type="submit" class="btn btn-success">Soumettre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>

<script setup>

    import { ref, onMounted } from 'vue'

    import { router } from '@inertiajs/vue3'

    import { useSwallSuccess, useSwallError } from "../../Composables/alert.js"

    const nomNiveauScolaire = ref("")

    let createModal = ""

    onMounted(() => {
        createModal = $('#createModal')
    })
 
    const closeModal = () => {

        $('#createNVModal').modal('hide')
        nomNiveauScolaire.value = ""

    }

    const soumettre = () => {

        const nom = nomNiveauScolaire.value

        const url = route('niveauScolaire.store')

        router.post(
            url,
            {
                nom
            },
            {
                onSuccess : (page) => {

                    closeModal();
                    useSwallSuccess("Niveau Scolaire ajouté avec succès")
                    
                },
                
                onError : (errors) => {

                    useSwallError("Echec de l'ajout du niveau scolaire")

                }
            }
        )

    }

</script>