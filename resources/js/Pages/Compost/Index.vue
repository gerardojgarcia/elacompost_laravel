<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, Head } from "@inertiajs/vue3";

const form = useForm({
  weight: "",
});
</script>

<template>
  <Head title="Compost" />

  <AuthenticatedLayout>
    <div class="p-4 sm:p-6 lg:p-8">
      <strong>Compost</strong>

      <form
        @submit.prevent="
          form.post(route('compost.store'), { onSuccess: () => form.reset() })
        "
        class="flex flex-col m-auto shadow-xl w-1/4 lg:p-8"
      >
        <strong>How much did you compost today?</strong>
        <label for="weight">Enter compost weight</label>
        <div class="flex items-center">
          <input id="weight" type="number" class="w-1/4 mr-6" v-model="form.weight" />
          <p class="text-2xl font-bold">lbs</p>
        </div>
        <strong>Today's weight: {{ weight }}</strong
        ><strong>Total Weight: {{ weight }}</strong>
        <p class="last-weight-date">{{ weight.date }}</p>

        <PrimaryButton class="justify-center w-1/2 self-center mt-8"
          >Submit</PrimaryButton
        >
      </form>
    </div>
  </AuthenticatedLayout>
</template>
