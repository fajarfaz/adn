<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Article List
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert" v-if="$page.props.flash.message">
                      <div class="flex">
                        <div>
                          <p class="text-sm">{{ $page.props.flash.message }}</p>
                        </div>
                      </div>
                    </div>
                    <div v-if="$page.props.errors">
                        <div v-for="error in $page.props.errors">
                            {{error}}
                        </div>
                    </div>
                    <button @click="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Portfolio</button>
                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 w-20">No.</th>
                                <th class="px-4 py-2">Title</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2">Images</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(row, i) in data" :key="row.id">
                                <td class="border px-4 py-2">{{ i+1 }}</td>
                                <td class="border px-4 py-2">{{ row.title }}</td>
                                <td class="border px-4 py-2">{{ row.description }}</td>
                                <td class="border px-4 py-2">
                                  <img v-for="image in row.images"
                                  :key="image.id"
                                  :src="`/storage/${image.file_path}`">
                                </td>
                                <td class="border px-4 py-2">
                                    <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                    <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" v-if="isOpen">
                      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        
                        <div class="fixed inset-0 transition-opacity">
                          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                      
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                          <form enctype="multipart/form-data">
                          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="">
                                  <div class="mb-4">
                                      <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                                      <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Title" v-model="form.title">
                                  </div>
                                  <div class="mb-4">
                                      <label for="formDescription" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                                      <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formDescription" placeholder="Enter Description" v-model="form.description">
                                  </div>
                                  <div v-for="(i,index) in form.loopImage" class="mb-4">
                                      <label for="formImages" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
                                      <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formImages" placeholder="Enter Description"  @input="form.loopImage[index].file = $event.target.files[0]" @change="onFileChange($event, index)">
                                      <img v-if="(i != '')" :src="i" />
                                      <button type="button" @click="removeImage(i)">Remove image</button>
                                  </div>
                                  <div class="mb-4">
                                      <button type="button" @click="addImage()">Add image</button>
                                  </div>

                            </div>
                          </div>
                          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                              <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" v-show="!editMode" @click="save(form)">
                                Save
                              </button>
                            </span>
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                              <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" v-show="editMode" @click="update(form)">
                                Update
                              </button>
                            </span>
                            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                              
                              <button @click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Cancel
                              </button>
                            </span>
                          </div>
                          </form>
                          
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
       
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
    import { useForm } from '@inertiajs/inertia-vue3'
    export default {
        components: {
            AppLayout,
            Welcome,
        },
        props: ['data','errors'],
        data() {
            return {
                editMode: false,
                isOpen: false,
                i: 0,
                form: useForm({
                    title: null,
                    description: null,
                    loopImage: [],
                }),
            }
        },
        methods: {
            onFileChange(e,index) {
              var files = e.target.files || e.dataTransfer.files;
              //this.form.loopImage[index].file = e.target.files;
              if (!files.length)
                return;
              this.createImage(files[0],index);
            },
            addImage() {
              this.form.loopImage.push({
                file: ''
              })
            },
            createImage(file,index) {
                let reader = new FileReader();
                reader.onload = (e) => {
                    this.form.loopImage[index] = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            removeImage(index){
                this.form.loopImage.splice(index, 1);
            },
            openModal() {
                this.isOpen = true;
            },
            closeModal() {
                this.isOpen = false;
                this.reset();
                this.editMode=false;
            },
            reset() {
                this.form = {
                    title: null,
                    description: null,
                    loopImage: []
                }
            },
            save(data) {
                this.$inertia.post('portfolio', data,{
                  forceFormData: true,
                })  
                this.reset();
                this.closeModal();
                this.editMode = false;
            },
            edit(data) {
              this.form.title= data.title;
              this.form.description= data.description;
              data.images.forEach((value, index) => {
                  this.form.loopImage.push(value);
              });
              console.log(this.form);
              this.editMode = true;
              this.openModal();
            },
            update(data) {
                data._method = 'PATCH';
                this.$inertia.post('portfolio/edit/' + data.id, data)
                this.reset();
                this.closeModal();
            },
            deleteRow(data) {
                if (!confirm('Are you sure want to remove?')) return;
                data._method = 'DELETE';
                this.$inertia.post('portfolio/delete/' + data.id, data)
                this.reset();
                this.closeModal();
            },
        },
    }
</script>