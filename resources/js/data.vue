<template>
  <div class="shadow-sm overflow-hidden my-20">
    <div class="mb-4">
      <input
        class="block w-full rounded-md border-0 py-1.5 pl-4 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
        v-model="filter.search" placeholder="Search..." />
    </div>
    <table class="table-auto border-collapse text-sm w-96">
      <thead class="text-left">
        <tr>
          <th
            class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
            Domain
          </th>
          <th
            class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center w-6">
            Rank
          </th>
        </tr>
      </thead>
      <tbody class="bg-white dark:bg-slate-800">
        <tr v-for="(p, index) in paginatedPosts">
          <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
            {{ p.domain }}
          </td>
          <td
            class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400 text-center">
            {{ p.rank }}
          </td>
        </tr>
      </tbody>
    </table>
    <nav class="my-4 isolate inline-flex -space-x-px rounded-md shadow-sm text-sm" aria-label="Pagination">
      <ul class="flex">
        <li class="inline-flex items-center">
          <button type="button"
            class="relative rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
            @click="page--" :disabled="page <= 1">
            Previous
          </button>
        </li>
        <li class="inline-flex items-center" v-for="pageNumber in pages.slice(page - 1, page + 5)">
          <button type="button"
            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
            @click="page = pageNumber">
            {{ pageNumber }}
          </button>
        </li>
        <li class="inline-flex items-center">
          <button type="button"
            class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
            @click="page++" :disabled="pages.length == page">
            Next
          </button>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      posts: [''],
      page: 1,
      perPage: 10,
      // pages: [],
      filter: {
        search: ""
      }
    }
  },
  methods: {
    getPosts() {
      axios
        .get('/api/sites')
        .then((response) => {
          this.posts = response.data.data;
        })
    },
    setPages() {
      let numberOfPages = Math.ceil(this.posts.length / this.perPage);

      for (let index = 1; index <= numberOfPages; index++) {
        this.pages.push(index);
      }
    },
    paginate(posts) {
      let page = this.page;
      let perPage = this.perPage;
      let from = (page * perPage) - perPage;
      let to = (page * perPage);

      return posts.slice(from, to).sort((a, b) => a.rank - b.rank);
    }
  },
  computed: {
    filteredPosts() {
      let searchInput = this.filter.search.toLowerCase().split(' ');

      if (!searchInput.length) {
        return this.posts;
      }

      const sites = this.posts.filter((item) => {
        return searchInput.every((v) => {
          if (item.domain) {
            return item.domain.toLowerCase().includes(v);
          }

        })
      });

      return sites;
    },
    paginatedPosts() {
      return this.paginate(this.filteredPosts);
    },
    pages() {
      let numberOfPages = Math.ceil(this.filteredPosts.length / this.perPage);
      let p = [];

      for (let index = 1; index <= numberOfPages; index++) {
        p.push(index);
      }

      return p;
    }
  },
  created() {
    this.getPosts();
  },
  filters: {
    trimWords(value) {
      return value.split(" ").splice(0, 20).join(" ") + '...';
    }
  }
}
</script>