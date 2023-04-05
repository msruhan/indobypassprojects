<template>
  <div class="container-fluid mt-4">
    <div class="row align-items-center">
      <div id="password" class="card mt-4">
    <div class="card-header">
      <h5>API Management</h5>
      <p>Balance: {{ balance }}</p>
    </div>
    <div class="card-body pt-0">
      <div class="row mb-50">
        <label class="form-label">Name</label>
        <vsud-input type="password" placeholder="Name" />
        <label class="form-label">Type</label>
        <vsud-input type="password" placeholder="Type" />
        <label class="form-label">URL</label>
        <vsud-input type="password" placeholder="URL" />
        <label class="form-label">Username</label>
        <vsud-input type="password" placeholder="Username" />
        <label class="form-label">Key</label>
        <vsud-input type="password" placeholder="Key" />
      </div>

      <div class="card-body pt-0 mt-2">
        <div class="row">
          <div class="col-6">
           
            <div class="d-flex">
              <div class="my-auto">
              <vsud-switch checked />
              </div>
              <p class="text-sm text-secondary my-auto mt-0 mb-2">Sync IMEI Services</p>
            </div>
            <div class="d-flex">
              <div class="my-auto">
              <vsud-switch checked />
              </div>
              <p class="text-sm text-secondary my-auto mt-0 mb-2">Sync Server Services</p>
            </div>
            <div class="d-flex">
              <div class="my-auto">
              <vsud-switch checked />
              </div>
              <p class="text-sm text-secondary my-auto mt-0 mb-2">Sync File Services</p>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex">
              <div class="my-auto">
              <vsud-switch checked />
              </div>
              <p class="text-sm text-secondary my-auto mt-0 mb-2">Ignore Low Balance</p>
            </div>

            <div class="d-flex">
              <div class="my-auto">
              <vsud-switch checked />
              </div>
              <p class="text-sm text-secondary my-auto mt-0 mb-2">Auto Sync</p>
            </div>

          </div>
        </div>
      </div>
      <vsud-button color="dark" variant="gradient" class="mb-0 ms-auto" type="button" name="button">Add API</vsud-button>
      <vsud-button color="danger" variant="gradient" class="mb-0 ms-2" type="button" name="button">Cancel</vsud-button>

      <!--    <h5 class="mt-5">Password requirements</h5>
      <p class="text-muted mb-2">Please follow this guide for a strong password:</p>
      <ul class="text-muted ps-4 mb-0 float-start">
        <li>
          <span class="text-sm">One special characters</span>
        </li>
        <li>
          <span class="text-sm">Min 6 characters</span>
        </li>
        <li>
          <span class="text-sm">One number (2 are recommended)</span>
        </li>
        <li>
          <span class="text-sm">Change it often</span>
        </li>
      </ul> -->
   
   
    </div>
  </div>
    </div>
    <div class="row mb-5">
      <div class="col-lg-3">
        <side-nav />
      </div>
      <div class="col-lg-9 mt-lg-0 mt-4">
        <side-nav-item />
      </div>
    </div>
  </div>
</template>

<script>
//import NavPill from "./components/NavPill.vue";
//import SideNav from "./components/SideNav.vue";
//import SideNavItem from "./components/SideNavItem.vue";
import VsudButton from "@/components/VsudButton.vue";
import VsudInput from "@/components/VsudInput.vue";
import SoftCheckbox from "@/components/VsudCheckbox.vue";
import VsudSwitch from "@/components/VsudSwitch.vue";
import axios from 'axios';



export default {
  data() {
    return {
      balance: 0,
    };
  },
  mounted() {
    axios.get('./components/dhru.php')
      .then(response => {
        this.balance = response.data;
      })
      .catch(error => {
        console.log(error);
      });
  },
  name: "api",
  components: {
   // NavPill,
   // SideNav,
    //SideNavItem,
  
    VsudSwitch,
    VsudButton,
    VsudInput,
    SoftCheckbox,
  },
};
</script>
