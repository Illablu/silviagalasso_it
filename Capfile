# Load DSL and set up stages
require 'capistrano/setup'

# Include default deployment tasks
require 'capistrano/deploy'

desc "Sync"
namespace :deploy do
	
  desc "Sync remote by default"
  task :default do
    remote.default
  end

  namespace :remote do

      desc "Sync to remote server"
      task :default do
          `rsync -avz "/path/to/webapp" "#{remote_host}:#{remote_root}/path/to/webapp"`
      end
  end
end