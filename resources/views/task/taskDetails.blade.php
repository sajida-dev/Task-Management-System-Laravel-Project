@include("components.header")

<div class="container mx-9 my-9 ">
    <div class="px-4 sm:px-0">
      <h3 class="text-base font-semibold leading-7 text-gray-900">Task Information</h3>
      {{-- <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p> --}}
    </div>
    @if(isset($data))
    <div class="mt-6 border-t border-gray-100">
      <dl class="divide-y divide-gray-100">
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-gray-900">Title</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$data->title}}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-gray-900">Description</dt>
            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$data->description}}</dd>
          </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-gray-900">Status</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
            @if($data->status == 1)
                Active
            @else
                Inactive
            @endif
          </dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-gray-900">Due Date</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$data->due_date}}</dd>
        </div>
      </dl>
    </div>
    @endif
  </div>

<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
{{-- <table>
    @if(isset($data))
    <tr>
        <th>Title</th>
        <td>{{$data->title}}</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{$data->description}}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>
            @if($data->status == 1)
                Active
            @else
                Inactive
            @endif
        </td>
    </tr>
    <tr>
        <th>Due Date</th>
        <td>{{$data->due_date}}</td>
    </tr>
    @else
    <p>No data</p>
    @endif
</table> --}}
</div>
