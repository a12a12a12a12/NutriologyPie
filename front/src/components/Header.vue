<template>
  <Disclosure as="nav" class="bg-[#f8fafc]" v-slot="{ open }">
    <div class="mx-auto max-w-9xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-20 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button -->
          <DisclosureButton
            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
          >
            <span class="sr-only">Open main menu</span>
            <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
            <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
          </DisclosureButton>
        </div>
        <!-- Left (Logo && navi) -->
        <div
          class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start"
        >
          <router-link to="/">
            <div
              class="flex flex-shrink-0 items-center tracking-wider text-3xl"
            >
              <img class="pr-5" src="../assets/logo.png" alt="logo image" />
              <div class="font-[1000] text-[#2c8f5a]">Nutriology</div>
              <div class="text-[#69C761] pl-2 font-[1000]">Pie</div>
            </div></router-link
          >
          <!-- navi -->
          <div class="hidden m-auto text-2xl sm:ml-2 sm:block">
            <div class="flex space-x-4 ml-10">
              <router-link
                v-for="item in navigation"
                :key="item.name"
                :to="item.router"
                :class="[
                  item.current
                    ? 'text-[#C6643D]  underline underline-offset-4 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-2xl font-medium'
                    : 'text-[#5C5C5C]  hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-2xl font-medium',
                ]"
                :aria-current="item.current ? 'page' : undefined"
                >{{ item.name }}</router-link
              >
            </div>
          </div>
        </div>

        <el-autocomplete
          v-model="state"
          :fetch-suggestions="querySearchAsync"
          placeholder="Please search by topic"
          @select="handleSelect"
          clearable
        />

        <!-- Right (messaging && profile)-->
        <div
          class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0"
        >
          <!-- Messaging -->
          <button
            type="button"
            class="rounded-full bg-[#3b82f6] p-1 text-[#dbeafe] hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
          >
            <span class="sr-only">View notifications</span>
            <BellIcon class="h-6 w-6" aria-hidden="true" />
          </button>

          <!-- Profile dropdown -->
          <Menu as="div" class="relative ml-3">
            <div>
              <MenuButton
                class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
              >
                <span class="sr-only">Open user menu</span>
                <img
                  class="h-8 w-8 rounded-full"
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt=""
                />
              </MenuButton>
            </div>
            <transition
              enter-active-class="transition ease-out duration-100"
              enter-from-class="transform opacity-0 scale-95"
              enter-to-class="transform opacity-100 scale-100"
              leave-active-class="transition ease-in duration-75"
              leave-from-class="transform opacity-100 scale-100"
              leave-to-class="transform opacity-0 scale-95"
            >
              <MenuItems
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
              >
                <MenuItem v-slot="{ active }">
                  <router-link
                    to="profile"
                    :class="[
                      active ? 'bg-gray-100' : '',
                      'block px-4 py-2 text-sm text-gray-700',
                    ]"
                    >Your Profile</router-link
                  >
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <a
                    href="#"
                    :class="[
                      active ? 'bg-gray-100' : '',
                      'block px-4 py-2 text-sm text-gray-700',
                    ]"
                    >Settings</a
                  >
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <a
                    href="#"
                    :class="[
                      active ? 'bg-gray-100' : '',
                      'block px-4 py-2 text-sm text-gray-700',
                    ]"
                    >Sign out</a
                  >
                </MenuItem>
              </MenuItems>
            </transition>
          </Menu>
        </div>
      </div>
    </div>
    <!-- 最小size -->
    <DisclosurePanel class="sm:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3">
        <router-link
          v-for="item in navigation"
          :key="item.name"
          :to="item.router"
          :class="[
            item.current
              ? 'text-[#C6643D] underline underline-offset-4'
              : 'text-[#5C5C5C] hover:bg-gray-700 hover:text-white',
            'block px-3 py-2 rounded-md text-base font-medium',
          ]"
          :aria-current="item.current ? 'page' : undefined"
          >{{ item.name }}</router-link
        >
      </div>
    </DisclosurePanel>
  </Disclosure>
</template>

<script lang="ts" setup>
import {
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
} from "@headlessui/vue";
import { Bars3Icon, BellIcon, XMarkIcon } from "@heroicons/vue/24/outline";
import { onMounted, ref } from "vue";

const navigation = [
  { name: "Home", router: "/", current: true },
  { name: "Discover", router: "profile", current: false },
  { name: "Contact", router: "login", current: false },
];

// search box

const state = ref("");

interface LinkItem {
  value: string;
  link: string;
}

const links = ref<LinkItem[]>([]);

const loadAll = () => {
  return [
    { value: "Healthy Eating", link: "" },
    { value: "Meal Prep", link: "" },
    { value: "Lifestyle Diets", link: "" },
    { value: "Weight Control", link: "" },
    { value: "Products", link: "" },
  ];
};

let timeout;
const querySearchAsync = (queryString: string, cb: (arg: any) => void) => {
  const results = queryString
    ? links.value.filter(createFilter(queryString))
    : links.value;

  clearTimeout(timeout);
  timeout = setTimeout(() => {
    cb(results);
  }, 2000 * Math.random());
};
const createFilter = (queryString: string) => {
  return (restaurant: LinkItem) => {
    return (
      restaurant.value.toLowerCase().indexOf(queryString.toLowerCase()) === 0
    );
  };
};

const handleSelect = (item: LinkItem) => {
  console.log(item);
};

onMounted(() => {
  links.value = loadAll();
});
</script>
<style>
/* .logo {
  font-family: "Baloo Da";
  font-style: normal;

  color: #2c8f5a;
} */
</style>
