<x-layout>
    <x-slot name="title">User Management</x-slot>
    <x-slot name="meta">
        <meta name="description" content="User Management - Manage system users and permissions">
    </x-slot>

    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 p-4 lg:p-8">
        <header class="max-w-6xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white">User Management</h1>
            <p class="text-lg text-gray-300 mt-2">Manage system users and permissions</p>
        </header>

        <div class="max-w-6xl mx-auto">
            <div class="bg-gray-800 rounded-lg shadow-xl p-6">
                <div class="mb-6 flex justify-between items-center">
                    <h2 class="text-xl text-white font-semibold">User List</h2>
                    <button onclick="showCreateModal()"
                        class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg transition-colors">
                        Add User
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-700">
                                <th class="py-3 px-4 text-gray-300 font-semibold">ID</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Name</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Email</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Role</th>
                                <th class="py-3 px-4 text-gray-300 font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="border-b border-gray-700 hover:bg-gray-700/50 transition-colors">
                                    <td class="py-3 px-4 text-gray-300">{{ $user->id }}</td>
                                    <td class="py-3 px-4 text-gray-300">{{ $user->name }}</td>
                                    <td class="py-3 px-4 text-gray-300">{{ $user->email }}</td>
                                    <td class="py-3 px-4 text-gray-300">
                                        <span
                                            class="px-2 py-1 text-sm rounded-full
                                        @if ($user->is_admin) bg-purple-500/20 text-purple-300
                                        @else
                                            bg-blue-500/20 text-blue-300 @endif">
                                            {{ $user->is_admin ? 'Admin' : 'User' }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-4 space-x-2">
                                        <button onclick="showEditModal({{ $user->id }}, {{ json_encode($user) }})"
                                            class="inline-block px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded transition-colors">
                                            Edit
                                        </button>

                                        <button onclick="showDeleteModal({{ $user->id }})"
                                            class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white rounded transition-colors">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="createModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center"
        tabindex="-1" role="dialog">
        <div class="bg-gray-800 rounded-lg max-w-md w-full mx-4 shadow-2xl" role="document">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-white mb-4">Create New User</h3>

                <form id="createUserForm" action="{{ route('admin.userManagement.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="space-y-4">
                        <div>
                            <label for="create_name" class="block text-sm font-medium text-gray-300 mb-1">Name</label>
                            <input type="text" id="create_name" name="name"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                                required>
                        </div>

                        <div>
                            <label for="create_email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                            <input type="email" id="create_email" name="email"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                                required>
                        </div>

                        <div>
                            <label for="create_password"
                                class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                            <input type="password" id="create_password" name="password"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                                required>
                        </div>

                        <div>
                            <label for="create_password_confirmation"
                                class="block text-sm font-medium text-gray-300 mb-1">Confirm Password</label>
                            <input type="password" id="create_password_confirmation" name="password_confirmation"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                                required>
                        </div>

                        <div class="flex items-center">
                            <input type="hidden" name="is_admin" value="0">
                            <input type="checkbox" id="create_is_admin" name="is_admin" value="1"
                                class="w-4 h-4 bg-gray-700 border-gray-600 rounded text-blue-600 focus:ring-blue-500">
                            <label for="create_is_admin" class="ml-2 text-sm font-medium text-gray-300">Admin
                                Access</label>
                        </div>

                    </div>

                    <div class="flex justify-end space-x-3 mt-6">
                        <button type="button" onclick="closeCreateModal()"
                            class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg transition-colors">
                            Create User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit User Modal -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center"
        tabindex="-1" role="dialog">
        <div class="bg-gray-800 rounded-lg max-w-md w-full mx-4 shadow-2xl" role="document">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-white mb-4">Edit User</h3>

                <form id="editUserForm" method="POST">
                    @csrf
                    @method('POST')
                    <div class="space-y-4">
                        <div>
                            <label for="edit_name" class="block text-sm font-medium text-gray-300 mb-1">Name</label>
                            <input type="text" id="edit_name" name="name"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                                required>
                        </div>

                        <div>
                            <label for="edit_email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                            <input type="email" id="edit_email" name="email"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500"
                                required>
                        </div>

                        <div>
                            <label for="edit_password" class="block text-sm font-medium text-gray-300 mb-1">New
                                Password (leave blank to keep current)</label>
                            <input type="password" id="edit_password" name="password"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500">
                        </div>

                        <div>
                            <label for="edit_password_confirmation"
                                class="block text-sm font-medium text-gray-300 mb-1">Confirm New Password</label>
                            <input type="password" id="edit_password_confirmation" name="password_confirmation"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="flex items-center">
                            <input type="hidden" name="is_admin" value="0">
                            <input type="checkbox" id="edit_is_admin" name="is_admin" value="1"
                                class="w-4 h-4 bg-gray-700 border-gray-600 rounded text-blue-600 focus:ring-blue-500"
                                @checked(old('is_admin', $user->is_admin))>
                            <label for="edit_is_admin" class="ml-2 text-sm font-medium text-gray-300">Admin
                                Access</label>
                        </div>


                    </div>

                    <div class="flex justify-end space-x-3 mt-6">
                        <button type="button" onclick="closeEditModal()"
                            class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                            Update User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center"
        tabindex="-1" role="dialog">
        <div class="bg-gray-800 rounded-lg max-w-md w-full mx-4 shadow-2xl" role="document">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-white mb-4">Confirm Delete</h3>
                <p class="text-gray-300 mb-6">Are you sure you want to delete this user? This action cannot be undone.
                </p>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeDeleteModal()"
                        class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors">
                        Cancel
                    </button>
                    <form id="deleteUserForm" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Messages for Success/Error -->
    @if (session('success'))
        <div id="successToast"
            class="fixed bottom-4 right-4 bg-emerald-600 text-white px-6 py-3 rounded-lg shadow-lg transition-opacity duration-500">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="errorToast"
            class="fixed bottom-4 right-4 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg transition-opacity duration-500">
            {{ session('error') }}
        </div>
    @endif

    <script>
        // Create Modal Functions
        function showCreateModal() {
            const modal = document.getElementById('createModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.addEventListener('keydown', handleCreateModalEscape);
        }

        function closeCreateModal() {
            const modal = document.getElementById('createModal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.removeEventListener('keydown', handleCreateModalEscape);
            document.getElementById('createUserForm').reset();
        }

        function handleCreateModalEscape(e) {
            if (e.key === 'Escape') {
                closeCreateModal();
            }
        }

        // Edit Modal Functions
        function showEditModal(userId, userData) {
            const modal = document.getElementById('editModal');
            const form = document.getElementById('editUserForm');
            form.action = `{{ route('admin.userManagement.update', '') }}/${userId}`;

            // Populate form fields
            document.getElementById('edit_name').value = userData.name;
            document.getElementById('edit_email').value = userData.email;
            document.getElementById('edit_is_admin').checked = userData.is_admin;

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.addEventListener('keydown', handleEditModalEscape);
        }

        function closeEditModal() {
            const modal = document.getElementById('editModal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.removeEventListener('keydown', handleEditModalEscape);
            document.getElementById('editUserForm').reset();
        }

        function handleEditModalEscape(e) {
            if (e.key === 'Escape') {
                closeEditModal();
            }
        }

        // Click outside to close for both modals
        document.getElementById('createModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeCreateModal();
            }
        });

        document.getElementById('editModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeEditModal();
            }
        });
    </script>
</x-layout>
